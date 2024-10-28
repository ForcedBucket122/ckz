import java.util.Random;

public class Auto {
    float[] przebieg;
    public Auto() {
        przebieg = new float[12];
        Random random = new Random();
        for (int i = 0; i < przebieg.length; i++) {
            przebieg[i] = random.nextFloat() * 1000; // Losowe wartości od 0 do 1000 km
        }
    }
    public void getPrzebieg() {
        for (int i = 0; i < przebieg.length; i++) {
            System.out.format("%.2f%n",przebieg[i]);
        }
    }

    public void srPrzebieg(){
        float srednia=0;
        for (float f: przebieg){
            srednia+=f;
        }
        srednia/= przebieg.length;;
        System.out.format("%.2f%n",srednia);
    }

}
