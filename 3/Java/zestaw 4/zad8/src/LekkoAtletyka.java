public class LekkoAtletyka extends Sport{
    public String szczypior;
    public LekkoAtletyka(String szczypior){
        this.szczypior=szczypior;
    }
    @Override
    String Drukuj() {
        return szczypior+" jest lekko atletyczny";
    }

}
