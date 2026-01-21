<?php
require_once __DIR__ . '/../models/Formateur.php';

class FormateurController
{
    public function index()
    {
        $formateurs = Formateur::all();
        require __DIR__ . '/../views/admin/formateurs.php';
    }

    public function create()
    {
        require __DIR__ . '/../views/admin/formateur_create.php';
    }

    public function store()
    {
        Formateur::create($_POST);
        header("Location: index.php?page=admin-formateurs");
        exit;
    }

    public function edit()
    {
        $formateur = Formateur::find($_GET['id']);
        require __DIR__ . '/../views/admin/formateur_edit.php';
    }

    public function update()
    {
        Formateur::update($_GET['id'], $_POST);
        header("Location: index.php?page=admin-formateurs");
        exit;
    }

    public function delete()
    {
        Formateur::delete($_GET['id']);
        header("Location: index.php?page=admin-formateurs");
        exit;
    }
}
