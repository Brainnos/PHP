<?php


class Round
{
    //On définie nos variable privée (Accessible uniquement via les accesseurs)
    private $attacker;
    private $defender;

    //Le constructeur (définie quelle variable est égale à quoi)
    public function __construct(Player $player1, Player $player2)
    {
        $this->attacker = $player1;
        $this->defender = $player2;
    }

    public function attaquer()
    {
        $laVieDuDefender = $this->defender->getVie();
        $lattaqueDeLattacker = $this->attacker->getAttaque();
        $larmureDuDefender = $this->defender->getArmure();

        //On verifie que le joueur attaqué à encore assez de vie sinon il meurt (logique)
        if ($laVieDuDefender > $lattaqueDeLattacker) {

            //On retire la vie de l'attaquer qui correspond au point d'attaque de l'attaquant
            $this->defender->setVie($laVieDuDefender + $larmureDuDefender - $lattaqueDeLattacker);

            //On affiche le resultat du round
            echo 'Le joueur <b style="color:red">' . $this->attacker->getNickname() . '</b> est <b style="color:red">LVL' . $this->attacker->getLevel() . '</b> et il a <b style="color:red">' . $this->attacker->getVie() . '</b> de vie <br>Le joueur <b style="color:red">' . $this->defender->getNickname() . '</b> est <b style="color:red">LVL' . $this->defender->getLevel() . '</b> et il a <b style="color:red">' . $this->defender->getVie() . '</b> de vie, ' . "il a perdu " . ($this->attacker->getAttaque() - $this->defender->getArmure()) . " points de vie";

                        //On augmente le niveau de chaque joueur de 1
                        $this->attacker->lvlUp();
                        $this->defender->lvlUp();
            
        } else {
            echo $this->attacker->getNickname().' remporte la partie !<br>';
            echo $this->defender->getNickname().' est MORT !';
            die;
        }
    }
}