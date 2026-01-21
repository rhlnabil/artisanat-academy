<?php
require_once __DIR__ . '/../models/Cours.php';

class CoursController
{
    // ADMIN - list
    public function index()
    {
        $cours = Cours::all();
        require __DIR__ . '/../views/admin/courses.php';
    }

    // ADMIN - create form
  public function create()
{
    $categories = Category::all();
    $formateurs = Formateur::all();
    require __DIR__ . '/../views/admin/cours_create.php';
}


    // ADMIN - store
    public function store()
    {
        Cours::create($_POST);
        header("Location: index.php?page=admin-courses");
        exit;
    }

    // CLIENT + ADMIN - show
    public function show()
    {
        $cours = Cours::all();
        require __DIR__ . '/../views/cours/show.php';
    }

    // ADMIN - edit
    public function edit()
    {
        $cours = Cours::find($_GET['id']);
        require __DIR__ . '/../views/admin/cours_edit.php';
    }

    // ADMIN - update
    public function update()
    {
        Cours::update($_GET['id'], $_POST);
        header("Location: index.php?page=admin-courses");
        exit;
    }

    // ADMIN - delete
    public function delete()
    {
        Cours::delete($_GET['id']);
        header("Location: index.php?page=admin-courses");
        exit;
    }
}
