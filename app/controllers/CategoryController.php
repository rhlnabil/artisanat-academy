<?php
require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/../models/Formateur.php';

class CategoryController
{
    public function index()
    {
        $categories = Category::all();
        require __DIR__ . '/../views/admin/categories.php';
    }

    public function create()
    {
        $formateurs = Formateur::all();
        require __DIR__ . '/../views/admin/category_create.php';
    }

    public function store()
    {
        $photoName = null;

        if (!empty($_FILES['photo']['name'])) {
            $photoName = time() . '_' . $_FILES['photo']['name'];

            $uploadPath = __DIR__ . '/../../public/uploads/categories/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            move_uploaded_file(
                $_FILES['photo']['tmp_name'],
                $uploadPath . $photoName
            );
        }

        Category::create([
            'nom' => $_POST['nom'],
            'description' => $_POST['description'],
            'photo' => $photoName,
            'formateur_id' => $_POST['formateur_id']
        ]);

        header("Location: index.php?page=admin-categories");
        exit;
    }

    public function edit()
    {
        $category = Category::find($_GET['id']);
        $formateurs = Formateur::all();
        require __DIR__ . '/../views/admin/category_edit.php';
    }

    public function update()
    {
        $photoName = $_POST['old_photo'] ?? null;

        if (!empty($_FILES['photo']['name'])) {
            $photoName = time() . '_' . $_FILES['photo']['name'];
            move_uploaded_file(
                $_FILES['photo']['tmp_name'],
                __DIR__ . '/../../public/uploads/categories/' . $photoName
            );
        }

        Category::update($_GET['id'], [
            'nom' => $_POST['nom'],
            'description' => $_POST['description'],
            'photo' => $photoName,
            'formateur_id' => $_POST['formateur_id']
        ]);

        header("Location: index.php?page=admin-categories");
        exit;
    }

    public function delete()
    {
        Category::delete($_GET['id']);
        header("Location: index.php?page=admin-categories");
        exit;
    }
}
