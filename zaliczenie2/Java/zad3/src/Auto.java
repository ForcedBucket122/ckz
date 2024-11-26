import java.util.Random;

public class Auto {
    float[] przebieg= new float[12];

    public Auto(){
        for(int i = 0; i<12;i++){
            Random random = new Random();
            przebieg[i]= random.nextFloat()*1000;
        }
    }
    public float srPrzebieg(){
        float srednia=0;
        for (int i = 0; i<12; i++){
            srednia+=przebieg[i];
        }
        return srednia/przebieg.length;
    }
    public void getPrzebieg() {
        for(int i = 0; i<12;i++){
            System.out.println(przebieg[i]);
        }
    }
    public void getSrPrzebieg() {
        System.out.println(srPrzebieg());
    }
}
