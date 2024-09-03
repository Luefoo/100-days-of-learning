package academy.devdojo.maratonajava.javacore.Minterfaces.domain;

public class Fileloader implements DataLoader, DataRemover{
    @Override
    public void load() {
        System.out.println("Loading");
    }

    @Override
    public void remove(){
        System.out.println("Removing");
    }

    @Override
    public void checkPermission(){
        System.out.println("Checando permissoes no arquivo");
    }

}
