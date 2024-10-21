import java.util.Random;

public class Taxi extends Auto {
    float[] zarobki;
    public Taxi(){
        zarobki = new float[12];
        Random rand = new Random();
        for (int i=0; i<zarobki.length; i++){
            zarobki[i]=rand.nextFloat()*1000;
        }
    }
    public float[] getZarobki(){
        return zarobki;
    }
    public float srZarobki(){
        float srednia=0;
        for (int i = 0; i < zarobki.length; i++) {
            srednia+=zarobki[i];
        }
        srednia=srednia/zarobki.length;
        return srednia;
    }
}
