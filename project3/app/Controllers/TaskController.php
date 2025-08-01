<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskModel;
use CodeIgniter\API\ResponseTrait;

class TaskController extends BaseController
{
    use ResponseTrait;
    protected $taskModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
    }

    // READ: Menampilkan semua tugas milik user yang sedang login
    public function index()
    {
        $userId = user_id(); // Mengambil ID user dari Myth:Auth
        $tasks = $this->taskModel->where('user_id', $userId)->findAll();
        return $this->respond($tasks);
    }

    // CREATE: Menambah tugas baru
    public function create()
    {
        $userId = user_id();
        $data = $this->request->getJSON(true);
        $data['user_id'] = $userId;
        if ($this->taskModel->insert($data)) {
            return $this->respondCreated(['status' => 'success', 'message' => 'Tugas berhasil ditambahkan.']);
        }
        return $this->failValidationErrors($this->taskModel->errors());
    }

    // UPDATE: Memperbarui tugas
    public function update($id = null)
    {
        $userId = user_id();
        $data = $this->request->getJSON(true);
        $task = $this->taskModel->find($id);

        if (!$task || $task['user_id'] != $userId) {
            return $this->failUnauthorized('Akses ditolak.');
        }

        if ($this->taskModel->update($id, $data)) {
            return $this->respondUpdated(['status' => 'success', 'message' => 'Tugas berhasil diperbarui.']);
        }
        return $this->failValidationErrors($this->taskModel->errors());
    }

    // DELETE: Menghapus tugas
    public function delete($id = null)
    {
        $userId = user_id();
        $task = $this->taskModel->find($id);

        if (!$task || $task['user_id'] != $userId) {
            return $this->failUnauthorized('Akses ditolak.');
        }

        if ($this->taskModel->delete($id)) {
            return $this->respondDeleted(['status' => 'success', 'message' => 'Tugas berhasil dihapus.']);
        }
        return $this->fail('Gagal menghapus tugas.');
    }
}