package academy.devdojo.maratonajava.javacore.Minterfaces.domain;

public class DatabaseLoader  implements DataLoader, DataRemover  {

    @Override
    public void load() {
        System.out.println("Carregando dados do banco de dados");

    }

    @Override
    public void remove(){
        System.out.println("Removendo do banco de dados");
    }

    @Override
    public void checkPermission(){
        System.out.println("Checando permissoes do banco de dados");
    }

    public static void retrieveMaxDataSize(){
        System.out.println("Dentro do retrieveMaxDataSize na interface");
    }

}

