import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.LinkedHashMap;

public class Main {
    public static void main(String[] args) throws IOException {

        ArrayList <Character> dane = new ArrayList<>();
        int nextChar;
        try(FileReader fileReader = new FileReader("src/dane_1.txt")){

            while ((nextChar=fileReader.read())!=-1){
                dane.add((char)nextChar);
            }
        } catch (IOException e) {
            throw new RuntimeException(e);
        }

        StringBuilder slowa = new StringBuilder();
        for (Character character : dane) {
            char zaszyfrowanyZnak = szyfrowanie(character, 107);
            slowa.append(zaszyfrowanyZnak);
        }

        try(FileWriter fileWriter= new FileWriter("src/wyniki_1.txt")){
            fileWriter.append(slowa);
        }


        StringBuilder dane2 = new StringBuilder();
        int nextChar2;

        try(FileReader fileReader = new FileReader("src/dane_2.txt")) {
            while ((nextChar2=fileReader.read())!=-1){
                dane2.append((char) nextChar2);
            }
        }

        LinkedHashMap<String , Integer> slowoKluczMapa = new LinkedHashMap<>();

        String[] linie = dane2.toString().split("\n");
        for(String linia: linie){
            String[] czesci = linia.split(" ");
            if (czesci.length == 2) {
                String word = czesci[0].trim();
                String keyStr = czesci[1].trim();

                try {
                    int key = Integer.parseInt(keyStr);
                    slowoKluczMapa.put(word, key);
                } catch (NumberFormatException e) {
                    System.err.println("Nieprawidłowa liczba: " + keyStr + " w linii: " + linia);
                }
            } else {
                System.err.println("Nieprawidłowy format linii: " + linia);
            }
        }
        StringBuilder roszyfrowaneSlowo = new StringBuilder();
        for(String slowo: slowoKluczMapa.keySet()){
            char[] slowoZnaki = slowo.toCharArray();
            for (char x: slowoZnaki){
                roszyfrowaneSlowo.append(rozSzyfrowanie(x, slowoKluczMapa.get(slowo)));
            }
            roszyfrowaneSlowo.append("\n");
        }
        try(FileWriter fileWriter = new FileWriter("src/wynik_2.txt")) {
            fileWriter.append(roszyfrowaneSlowo);
        }

    }
    public static char szyfrowanie(char znak, int k){
        String litery = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        k = k%26;
        int indeks = litery.indexOf(znak);
        if (indeks == -1) {

            return znak;
        }

        int nowyIndeks = (indeks + k)%26;

        return litery.charAt(nowyIndeks);
    }
    public static char rozSzyfrowanie(char znak, int k){
        String litery = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        k = k%26;
        int indeks = litery.indexOf(znak);
        if (indeks == -1) {

            return znak;
        }

        int nowyIndeks = (indeks - k + 26)%26;

        return litery.charAt(nowyIndeks);
    }
}