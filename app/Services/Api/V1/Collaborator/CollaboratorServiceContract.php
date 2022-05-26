<?php

namespace App\Services\Api\V1\Collaborator;

interface CollaboratorServiceContract
{
    public function get();
    public function getAll();
    public function store();
    public function update();
    public function delete();
}