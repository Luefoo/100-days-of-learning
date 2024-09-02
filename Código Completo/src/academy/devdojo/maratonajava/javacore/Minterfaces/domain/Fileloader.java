package academy.devdojo.maratonajava.javacore.Minterfaces.domain;

public class Fileloader implements DataLoader{
    @Override
    public void load() {
        System.out.println("Loading");
    }
}
