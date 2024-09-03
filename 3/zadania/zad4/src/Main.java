import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        System.out.print("Podaj litry: ");
        float litr = scan.nextInt();
        double galony=litr*0.2641720524;

        System.out.println(galony); //do dwoch miejsc po przecinku
    }
}