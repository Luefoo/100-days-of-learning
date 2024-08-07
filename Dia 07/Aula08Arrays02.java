public class Aula08Arrays02 {
    public static void main(String[] args) {
        // byte, short, int, long, floar e double = 0
        // char '\u0000' ''
        // String = null

        String [] nms = new String[4];
        nms[0] = "Goku";
        nms[1] = "Law";
        nms[2] = "Saitama";
        nms[4] = "Sung";

        for (int i = 0; i < nms.length ; i++) {
            System.out.println(nms[i]);
        }
    }
}
