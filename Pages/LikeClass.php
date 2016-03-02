<?php
class Vote
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function like($recette_id, $user_ip)
    {
        $req = $this->pdo->prepare('SELECT * FROM recette WHERE id = ?');
        $req->execute(array($_GET['recette_id']));
        if($req->rowCount() > 0)
        {
            $req = $this->pdo->prepare('INSERT INTO votes SET id_recette=?, user_id=?, vote = 1');
            $req->execute([$recette_id, $user_ip]);
            return true;
        }
        else
        {
            throw new Exception('impossible de voter enregistrement n\'existe pas');
        }
    }

    public function dislike($recette_id, $user_ip)
    {
        $req = $this->pdo->prepare('SELECT * FROM recette WHERE id = ?');
        $req->execute(array($_GET['recette_id']));
        if ($req->rowCount() > 0) {
            $req = $this->pdo->prepare('INSERT INTO votes SET id_recette=?, user_id=?, vote = -1');
            $req->execute([$recette_id, $user_ip]);
            return true;
        } else {
            throw new Exception('impossible de voter enregistrement n\'existe pas');
        }
    }

        public function updateCount()
        {
            $req = $this->pdo->prepare('SELECT COUNT(id) AS count, vote FROM votes WHERE id_recette = ? GROUP BY vote');
            $req->execute([$_GET['recette_id']]);
            $votes = $req->fetchAll();
            $like = 0;
            $dislike = 0;
            foreach($votes as $vote)
            {
                if($vote['vote'] == 1)
                {
                    $like = $vote['count'];
                }
                if($vote['vote'] == -1)
                {
                    $dislike = $vote['count'];
                }
                //var_dump($vote);

            }
            $requete = $this->pdo->prepare('UPDATE recette SET like_count=?, dislike_count=? WHERE id=?');
            $requete->execute([$like, $dislike, $_GET['recette_id']]);
        }

}