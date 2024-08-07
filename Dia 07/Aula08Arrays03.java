public class Aula08Arrays03 {
    public static void main(String[] args) {
        int[] num = new int[3];
        int[] num2 = {1, 2, 3, 4, 5};
        int[] num3 = new int[]{1, 2, 3, 4, 5};

        for (int i = 0; i < num3.length; i++) {
            System.out.println(num3[i]);
        }

        for (int i : num3){
            System.out.println(i);
        }

        int i = num3[0];
        System.out.println(num);
        i = num3[1];
        System.out.println(num);
        i = num3[2];
        System.out.println(num);

        
    }
}
