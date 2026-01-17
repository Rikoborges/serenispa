<?php

class configDB {
    private string $fichier;
    private string $hote;
    private int $port;
    private string $dbname;
    private string $user;
    private string $pass;

    public function __construct(string $fichier) {
        $this->fichier = $fichier;
        $this->lireConf();
    }

    private function lireConf(): void {
        if (!file_exists($this->fichier)) {
            die(" Fichier de configuration introuvable : {$this->fichier}");
        }

     $lines = array_map('trim', file($this->fichier, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));


        if (count($lines) < 5) {
            die("❗ Le fichier de configuration est incomplet.");
        }

        [$this->hote, $this->port, $this->dbname, $this->user, $this->pass] = $lines;
    }

    public function getHote(): string {
        return $this->hote;
    }

    public function getPort(): int {
        return (int)$this->port;
    }

    public function getDBName(): string {
        return $this->dbname;
    }

    public function getUser(): string {
        return $this->user;
    }

    public function getPass(): string {
        return $this->pass;
    }
}
?>
