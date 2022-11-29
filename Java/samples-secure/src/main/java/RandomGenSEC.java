
// Noted as completely deterministic 
// and not suitable for cryptographic purposes
import java.util.*;
import java.io.*;
import org.json.simple.JSONArray;
import java.security.SecureRandom;

public class RandomGenSEC {
    public static void main(String[] args) {
        // Number of gathered items
        int n = 1000;
        int samples = 500;
        
        for (int s = 0; s < samples; s++){
            JSONArray json = new JSONArray();
            
            String name = "./testing/sec-samples/"+"java-rand-sec"+(s+1)+".json";
            
            // Initialize generator. 
            // We initialize it so it has a consistent seed
            Random rand = new SecureRandom();
            
            // collect data
            for(int i = 0; i < n; i++){
                double num = rand.nextDouble();
                json.add((Object)num);
            }
            rand = null;

            try {
                
                FileWriter out = new FileWriter(name);
                out.write(json.toJSONString());

                out.close();
            }catch(Exception E){
                System.out.println(E.toString());
            }
        }
        
    }
}
