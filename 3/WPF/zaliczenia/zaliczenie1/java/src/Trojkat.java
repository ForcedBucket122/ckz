import java.util.Random;

public class Trojkat {
    public int wysokosc;
    public int podstawa;
    public Trojkat(){
        Random random = new Random();
        wysokosc= random.nextInt()/10000000;
        if (wysokosc<0){
            wysokosc*=-1;
        }
        podstawa=random.nextInt()/10000000;
        if (podstawa<0){
            podstawa*=-1;
        }
    }
    public int pole(){
        return (podstawa * wysokosc) / 2;
    }

}
