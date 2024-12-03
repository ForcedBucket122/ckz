import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        StringBuilder wynik = new StringBuilder();
        int n = getValidLength(scanner);
        String nazwa = getValidName(scanner, n);

        ArrayList<Character> znaki = getAllowedCharacters();
        ArrayList<Character> listaNazwa = new ArrayList<>();
        for (char x : nazwa.toCharArray()) {
            listaNazwa.add(x);
        }

        // Remove all characters that are not letters or digits
        listaNazwa.removeIf(x -> !Character.isLetterOrDigit(x));

        if (isValidName(listaNazwa, znaki)) {
            wynik.append(adjustNameLength(listaNazwa, n));
        } else {
            wynik = new StringBuilder("0");
        }

        System.out.println(wynik);
    }

    private static int getValidLength(Scanner scanner) {
        int n = 0;
        while (n <= 1 || n >= 65535) {
            System.out.print("Wpisz dlugosc nazwy: ");
            n = scanner.nextInt();
        }
        return n;
    }

    private static String getValidName(Scanner scanner, int n) {
        String nazwa = "";
        while (nazwa.length() <= 1 || nazwa.length() >= 65535) {
            System.out.print("Wpisz nazwe: ");
            nazwa = scanner.next();
        }
        return nazwa;
    }

    private static ArrayList<Character> getAllowedCharacters() {
        String l = "qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM";
        String li = "1234567890";
        String dop = "_$";
        ArrayList<Character> znaki = new ArrayList<>();
        for (char x : (l + li + dop).toCharArray()) {
            znaki.add(x);
        }
        return znaki;
    }

    private static boolean isValidName(ArrayList<Character> listaNazwa, ArrayList<Character> znaki) {
        for (char x : listaNazwa) {
            if (!znaki.contains(x)) {
                return false;
            }
        }
        return true;
    }

    private static String adjustNameLength(ArrayList<Character> listaNazwa, int n) {
        StringBuilder wynik = new StringBuilder();
        if (listaNazwa.size() <= n) {
            for (char x : listaNazwa) {
                wynik.append(x);
            }
        } else {
            while (listaNazwa.size() != n) {
                for (int i = listaNazwa.size() - 1; i >= 0; i--) {
                    if (listaNazwa.size() > n) {
                        listaNazwa.remove(i);
                    }
                }
            }
            for (char x : listaNazwa) {
                wynik.append(x);
            }
        }
        return wynik.toString();
    }
}
