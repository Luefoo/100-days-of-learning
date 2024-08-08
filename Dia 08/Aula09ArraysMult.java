public class Aula09ArraysMult {
    public static void main(String[] args) {
        int [][] dias = new int [3][3];
        dias[0][0] = 31;
        dias[0][1] = 25;
        dias[0][2] = 34;
        dias[1][0] = 51;
        dias[1][1] = 11;
        dias[1][2] = 26;
        dias[2][0] = 87;
        dias[2][1] = 42;
        dias[2][2] = 191;

        for (int i = 0; i < dias.length; i++) {
            for (int j = 0; j < dias[0].length; j++) {
                System.out.println(dias[i][j]);
                
            }
            
        }
        for (int[] arrBase: dias) {
            for (int num: arrBase){
                System.out.println(num);
            }
        }
    }
}
