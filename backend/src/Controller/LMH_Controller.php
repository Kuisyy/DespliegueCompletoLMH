<?php
namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class LMH_Controller extends AbstractController 
{
    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    #[Route('/api/LMH', name: 'get_LMH')]
    public function index(): JsonResponse
    {
        $sql = 'SELECT fraseLMH FROM secretosLMH LIMIT 1';
        $result = $this->connection->fetchOne($sql);

        if (!$result) {
            return $this->json(['fraseLMH' => 'No fraseLMH found in the database!']);
        }

        $result = 'Backend Operativo, respuesta de la BD: '.$result;
        return $this->json(['fraseLMH' => $result]);
    }
}
