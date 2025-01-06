import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Objects;

public class Main {
    public static StringBuilder dane = new StringBuilder();
    public static void main(String[] args) throws FileNotFoundException {
        Odczyt("src/dane.txt");
        String[] slowa = dane.toString().split("\\s+");
        for(String x: slowa){
            if(Objects.equals(x, Reverse(x))){
                System.out.println("Palindromy to: "+x);
            }
        }
    }
    public static void Odczyt(String nazwaPliku) throws FileNotFoundException {
        int nextChar;
        try(FileReader fileReader = new FileReader(nazwaPliku)){
            while ((nextChar= fileReader.read())!=-1){
                dane.append((char) nextChar);
            }
        } catch (IOException e) {
            throw new RuntimeException(e);
        }
    }
    public static String Reverse(String x){
        char[] tab = x.toCharArray();
        StringBuilder wynik = new StringBuilder();
        for (int i= tab.length-1; i>=0; i--){
            wynik.append(tab[i]);
        }
        return wynik.toString();
    }
}