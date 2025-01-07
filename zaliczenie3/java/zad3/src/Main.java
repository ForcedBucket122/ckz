import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.lang.reflect.Array;
import java.util.Arrays;
import java.util.Objects;

public class Main {
    static StringBuilder dane = new StringBuilder();
    public static void main(String[] args) throws IOException {
        otworz("src/anagram.txt");
        String[] wiersze = dane.toString().split("\n");
        for(String wiersz: wiersze){
            String[] slowa = wiersz.split(" ");
            int temp=0;
            for(int i=0; i< slowa.length-1; i++){
                if (slowa[i].length()==slowa[i+1].length()){
                    temp+=i;
                    if(temp>=3){
                        zapis(wiersz, "src/odp_a.txt");
                    }

                }
            }
            int temp2=0;
            String pierwszeSlowo=slowa[0];
            for(int i=1; i< 5; i++){
                if(Objects.equals(pierwszeSlowo, sortowanie(slowa[i]))){
                    temp2+=i;
                    if(temp2>=6){
                        zapis(wiersz, "src/odp_b.txt");
                    }
                }
            }
        }
    }
    public static void otworz(String nazwaPliku) throws FileNotFoundException {
        int nextChar;
        try(FileReader fileReader = new FileReader(nazwaPliku)){
            while ((nextChar=fileReader.read())!=-1){
                dane.append((char)nextChar);
            }
        } catch (IOException e) {
            throw new RuntimeException(e);
        }
    }
    public static void zapis(String tekst, String nazwaPliku) throws IOException {
        try(FileWriter fileWriter = new FileWriter(nazwaPliku)){
            fileWriter.append(tekst);
        }
    }
    public static String sortowanie(String tekst){
        char[] sortuj = tekst.toCharArray();
        Arrays.sort(sortuj);
        StringBuilder wynik = new StringBuilder();
        for(char x: sortuj){
            wynik.append(x);
        }
        return wynik.toString();
    }
}