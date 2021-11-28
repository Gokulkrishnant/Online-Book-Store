import java.net.*;
import java.io.*;	
public class SimpleServer {
public static void main(String args[]) throws IOException {
ServerSocket s = new ServerSocket(1254);
Socket s1=s.accept(); // Wait and accept a connection
OutputStream s1out = s1.getOutputStream();
DataOutputStream dos = new DataOutputStream (s1out);
dos.writeUTF(“Hi there”);
dos.close();
s1out.close();
s1.close();
}
}
