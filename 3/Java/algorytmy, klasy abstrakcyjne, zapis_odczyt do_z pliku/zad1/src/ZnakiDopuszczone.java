import java.util.ArrayList;

public class ZnakiDopuszczone {
    private static final String litery = "qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    private static final String samogloski = "eyuioaEYUIOA";
    private static final String cyfry = "1234567890";
    private static final String znaki = "_$";
    public char[] literyTab = litery.toCharArray();
    public char[] samogloskiTab = samogloski.toCharArray();
    public char[] cyfryTab = cyfry.toCharArray();
    public char[] znakiTab = znaki.toCharArray();
    public ArrayList<Character> wszystkieZnaki = new ArrayList<>();
    public ZnakiDopuszczone(){
        for(char x: literyTab){
            wszystkieZnaki.add(x);
        }
        for(char x: cyfryTab){
            wszystkieZnaki.add(x);
        }
        for(char x: znakiTab){
            wszystkieZnaki.add(x);
        }

    }

    public ArrayList<Character> getWszystkieZnaki() {
        return wszystkieZnaki;
    }
}
