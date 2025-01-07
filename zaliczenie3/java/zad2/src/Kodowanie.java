import java.util.Scanner;

public class Kodowanie {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Podaj napis: ");
        String napis = scanner.next();
        System.out.println("Tekst: "+napis);
        System.out.print("Ciąg bajtów:");
        byte[] kod = napis.getBytes();
        for(byte n: kod)
            System.out.print(" "+n+",");
        System.out.println("\b.");

    }
}
