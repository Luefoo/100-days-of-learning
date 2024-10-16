package academy.devdojo.maratonajava.javacore.Rdatas.test;


import java.text.DateFormat;
import java.util.Calendar;
import java.util.Locale;

public class LocaleTest01 {
    public static void main(String[] args) {
        Locale localeItaly = new Locale("it", "IT");
        Locale localeItaly1 = new Locale("it", "CH");
        Calendar calendar = Calendar.getInstance();


        DateFormat df1 = DateFormat.getDateInstance(DateFormat.FULL,localeItaly);
        DateFormat df2 = DateFormat.getDateInstance(DateFormat.FULL,localeItaly1);
        System.out.println(df1.format(calendar.getTime()));
        System.out.println(df2.format(calendar.getTime()));
    }
}
