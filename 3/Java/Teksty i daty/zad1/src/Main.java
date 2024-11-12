public class Main {
    public static void main(String[] args) {
        StringBuilder builder = new StringBuilder(100);
        builder.append("na".repeat(16));
        builder.append("Batman!");
        System.out.println(builder);
        System.out.println(builder.indexOf("Batman"));
        builder.insert(32, "...");
        System.out.println(builder.toString());
    }
}