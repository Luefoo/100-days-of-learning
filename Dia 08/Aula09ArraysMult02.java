public class Aula09ArraysMult02 {
    public static void main(String[] args) {
        int [][] arrayInt = new int[3][];

        arrayInt[0] = new int[2];
        arrayInt[1] = new int[] {1,2,3};
        arrayInt[2] = new int[] {1,2,3,4,5,6};

        int[][] arrayInt2 = {{0,0},{1,2,3},{3,4,5,6,7,8} };

        for (int[] arrayBase: arrayInt2){
            for (int num: arrayBase){
                System.out.println(num);
            }
        }
    }
}
