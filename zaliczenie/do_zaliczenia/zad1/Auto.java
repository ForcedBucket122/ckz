import java.util.Random;

public class Auto {
    private float[] przebieg;

    public Auto() {
        przebieg = new float[12];
        Random random = new Random();
        for (int i = 0; i < przebieg.length; i++) {
            przebieg[i] = random.nextFloat() * 1000; // Losowe wartości od 0 do 1000 km
        }
    }
    public float[] getPrzebieg() {
        return przebieg;
    }
    public float srPrzebieg(){
        float srednia=0;
        for (int i=0; i<przebieg.length; i++){
            srednia+=przebieg[i];
        }
        srednia=srednia/przebieg.length;
        return srednia;
    }
}
