package academy.devdojo.maratonajava.javacore.Sformatacao.test;

import java.util.Locale;

public class LocalTest02 {
    public static void main(String[] args) {
        System.out.println(Locale.getDefault());
        String[] isoCountries = Locale.getISOCountries();
        String[] isoLanguage = Locale.getISOLanguages();
    }
}
