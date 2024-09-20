package academy.devdojo.maratonajava.javacore.Rdatas.test;

import java.text.DateFormat;
import java.util.Calendar;

public class DateFormatTest01 {
    public static void main(String[] args) {
        Calendar c = Calendar.getInstance();
        DateFormat[] df = new DateFormat[3];
        df[0] = DateFormat.getInstance();
        df[1] = DateFormat.getDateTimeInstance();
        df[2] = DateFormat.getDateInstance();




    }
}
