public class GryZespolowe extends Sport{
    public String szczypior;
    public GryZespolowe(String szczypior){
        this.szczypior=szczypior;
    }
    @Override
    String Drukuj() {
        return szczypior+" jest grą zespołową";
    }
}
