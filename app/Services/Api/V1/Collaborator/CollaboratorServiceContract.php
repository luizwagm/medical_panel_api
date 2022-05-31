<?php

namespace App\Services\Api\V1\Collaborator;

interface CollaboratorServiceContract
{
    public function get();
    public function all();
    public function store();
    public function update();
    public function delete();
}