import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        //suma p z trzech liczb podanych przez urzytkownika
        Scanner scan = new Scanner(System.in);
        System.out.print("Podaj pierwsza liczbe: ");
        int a = scan.nextInt();
        System.out.print("Podaj druga liczbe: ");
        int b = scan.nextInt();
        System.out.print("Podaj trzecia liczbe: ");
        int c = scan.nextInt();

        int p = a+b+c;
        System.out.println(p);
    }
}