
// Noted as completely deterministic 
// and not suitable for cryptographic purposes
import java.util.*;
import java.io.*;
import org.json.simple.JSONArray;
import java.security.SecureRandom;

public class RandomGenSEC {
    public static void main(String[] args) {
        // Number of gathered items
        int n = 1600;
        int training_samples = 1000;
        int testing_samples = 500;
        
        String path = "C:/Users/Will/OneDrive - University of Nebraska at Omaha/Documents/College Files/CSCI 8470 Pattern Recognition/project data";

        // ==============================================
        // ============== Training Samples ==============
        // ==============================================
        for (int s = 0; s < training_samples; s++){
            JSONArray json = new JSONArray();
            
            String name =  path.concat("/data/training/java-sec-samples/"+(s+1)+".json");
            
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

        // ==============================================
        // ============== Testing Samples ==============
        // ==============================================
        for (int s = 0; s < testing_samples; s++){
            JSONArray json = new JSONArray();
            
            String name =  path.concat("/data/testing/java-sec-samples/"+(s+1)+".json");

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
