<?php
require_once __DIR__ . '/../config/Database.php';

class Propietarios {
    private $pdo = null;

    public function __construct() {
        $this->pdo = Database::getConexion();
    }

    /**
     * Obtiene todos los propietarios de mascotas.
     * @return array Lista de propietarios.
     */
    public function getAll(): array {
        $sql = "SELECT * FROM propietarios";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getById($id): array {
        return [];
    }

    public function delete($id) {
        return 0;
    }

    public function update($params) {
        $sql = "
        UPDATE propietarios SET
        nombres = ?,
        apellidos = ?
        WHERE idpropietario = ?
        ";
        $query = $this->pdo->prepare($sql);
        $query->execute([
            $params['nombres'],
            $params['apellidos'],
            $params['idpropietario']
        ]);
    }
}