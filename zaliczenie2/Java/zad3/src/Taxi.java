import java.util.Random;

public class Taxi extends Auto{
    float[] zarobki = new float[12];
    public Taxi(){
        for(int i = 0; i<12;i++){
            Random random = new Random();
            zarobki[i]= random.nextFloat()*100;
        }
    }
    public float srZarobki(){
        float srednia=0;
        for (int i = 0; i<12; i++){
            srednia+=zarobki[i];
        }
        return srednia/zarobki.length;
    }
}
