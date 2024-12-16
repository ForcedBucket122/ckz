import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;

public class Main {
    static int n = 0;
    static ArrayList <Character> wejscieLista = new ArrayList<>();
    static ZnakiDopuszczone dopuszczone = new ZnakiDopuszczone();
    static StringBuilder wynik = new StringBuilder();

    public static void main(String[] args) {
        odczyt();
        if(wejscieLista.size()>n){
            usunZnaki();
        }
        if(wejscieLista.size()>n){
            usunCyfry();
        }
        if(wejscieLista.size()>n){
            usunSamogloski();
        }
        if(wejscieLista.size()>n){
            usunWszystkieZnaki();
        }
        wynik.append(wejscieToString(wejscieLista));
        wyswietlWynik();

    }
    public static void wyswietlWynik(){
        if (czyZawieraZnakiNiedopuszczone(wejscieLista)){
            System.out.println(0);
        }else if(!wynik.isEmpty()) {
            System.out.println(new String(wynik));
        }
    }

    public static void odczyt() {
        char[] wejscie = new char[65535];
        try (FileReader fileReader = new FileReader("src/wejscie.txt")) {
            int character;
            int i = 0;
            boolean czyPierwsza = true;
            StringBuilder aktualna = new StringBuilder();
            while ((character = fileReader.read()) != -1) {
                if (character == '\n') {
                    if (czyPierwsza) {
                        n = Integer.parseInt(aktualna.toString().trim());
                        czyPierwsza = false;
                    } else {
                        wejscie = aktualna.toString().toCharArray();
                        break;
                    }
                    aktualna.setLength(0);
                } else {
                    aktualna.append((char) character);
                }
            }

            if (czyPierwsza && !aktualna.isEmpty()) {
                n = Integer.parseInt(aktualna.toString().trim());
            } else if (!czyPierwsza && !aktualna.isEmpty()) {
                wejscie = aktualna.toString().toCharArray();
            }
            for(char x: wejscie){
                wejscieLista.add(x);
            }
        } catch (IOException e) {
            System.err.println("Error reading file: " + e.getMessage());
        }
    }
    public static boolean czyZawieraZnakiNiedopuszczone(ArrayList<Character> tab){
        for(char x: tab){
            if(!dopuszczone.wszystkieZnaki.contains(x)){
                return true;
            }
        }
        return false;
    }
    public static String wejscieToString(ArrayList<Character> tab){
        StringBuilder stringBuilder = new StringBuilder();
        for (char x: tab){
            stringBuilder.append(x);
        }
        return new String(stringBuilder);
    }
    public static void usunZnaki(){
        for (int i = wejscieLista.size() - 1; i >= 0; i--) { // Iterate backwards
            char currentChar = wejscieLista.get(i);

            for (char x : dopuszczone.znakiTab) {
                if (currentChar == x) {
                    wejscieLista.remove(i);
                    break;
                }
            }
        }
    }
    public static void usunCyfry(){
        // Remove digits regardless of the list size
        for (int i = wejscieLista.size() - 1; i >= 0; i--) { // Iterate backwards
            char currentChar = wejscieLista.get(i);
            // Check if the character is a digit from dopuszczone.cyfryTab
            for (char x : dopuszczone.cyfryTab) {
                if (currentChar == x) {
                    wejscieLista.remove(i); // Remove the digit if found
                    break; // Stop checking further digits for this character
                }
            }
        }
    }
    public static void usunSamogloski() {
        boolean pierwszaSamogloska = true; // Flag to track the first vowel

        // Iterate backwards through the list to avoid skipping elements when removing
        for (int i = 0; i < wejscieLista.size(); i++) {
            char aktualnycChar = wejscieLista.get(i);

            // Check if the current character is a vowel
            for (char samogloska : dopuszczone.samogloskiTab) {
                if (aktualnycChar == samogloska) {
                    if (pierwszaSamogloska) {
                        // Keep the first vowel
                        pierwszaSamogloska = false;
                    } else {
                        // Remove subsequent vowels
                        wejscieLista.remove(i);
                        i--; // Decrease the index to check the new element at this position
                    }
                    break; // Exit the loop once we handle the current character
                }
            }
        }
    }
    public static void usunWszystkieZnaki() {
        // Iterate backwards through the list to avoid skipping elements when removing
        for (int i = wejscieLista.size() - 1; i >= 0; i--) {
            if(wejscieLista.size()>n){
//                System.out.println(wejscieToString(wejscieLista));
                wejscieLista.remove(i);
            }
        }
    }



}
