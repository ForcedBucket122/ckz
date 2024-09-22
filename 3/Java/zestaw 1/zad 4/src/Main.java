import java.util.Scanner;


public class Main {
    public static void main(String[] args) {
        //litry na galony zaokraglij do 2 miejsc po przecinku
        Scanner scan = new Scanner(System.in);
        System.out.print("Podaj ilosc litrow: ");
        float a = scan.nextFloat();
        float g = (float) (a*0.2641720524);

        System.out.printf("%.2f",g);
    }
}