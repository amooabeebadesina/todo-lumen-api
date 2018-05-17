<?php
/**
 * Created by PhpStorm.
 * User: abeeb
 * Date: 5/17/18
 * Time: 12:46 PM
 */

namespace App\Http\Controllers;

use App\Repositories\Concrete\TodoRepository;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    protected $todoRepo;

    public function __construct(TodoRepository $todoRepo)
    {
        $this->todoRepo = $todoRepo;
    }

    public function index()
    {
        $response = $this->todoRepo->all();
        return $this->sendSuccess($response);
    }

    public function create(Request $request)
    {
        $response = $this->todoRepo->create($request);
        if ($response) {
            return $this->sendSuccess($response);
        }
        return $this->sendError('Error creating Todo');
    }

    public function update(Request $request, $id)
    {
        $response = $this->todoRepo->update($request, $id);
        if (!$response) {
            return $this->sendError('Error updating todo');
        }
        return $this->sendSuccess($response);
    }

    public function delete(Request $request, $id)
    {
        $response = $this->todoRepo->delete($id);
        return $this->sendSuccess($response);
    }
}