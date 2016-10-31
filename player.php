public class player{

    //Instanzvariablen

$playerName;

$hp;
$experience;
$level;

$alive;



    //Konstruktor

public player(playerName){
this.name = name;
level = 1;
hp = 100;
experience = 0;
alive = true;
}

    //Methoden

public void decreaseHealth(decrease){
    hp - decrase = hp;
    
    if(hp <= 0){
               alive = false;
               }
}

public void increaseHealth(increase)
    hp + increase = hp;
    
    if(hp >= 0){
        alive = true;
        }
        
public void increaseExperience(increase){
        experience += increase;
        
        if(experience > 100){
        level++;
        experience -100 = experience;
        }
        //Hier gäbe es natürlich die Möglichkeit, dass wenn man mehr als 100 exp bekommt, man ein Poblem hat. 
        //Deswegen wird man nie mehr als 100 exp gleichzeitig erhalten.
    }
}