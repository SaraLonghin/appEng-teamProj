package loginFiles;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

import dbUtil.dbConnection;
import loginFiles.LoginModel;

public class LoginModel {
	Connection connection;
	
	public LoginModel() {
		try
	    {
	      this.connection = dbConnection.getConnection();
	    }
	    catch (SQLException ex)
	    {
	      Logger.getLogger(LoginModel.class.getName()).log(Level.SEVERE, null, ex);
	    }
	    if (this.connection == null) {
	      System.exit(1);
	    }
	  }
	
	public boolean isDatabaseConnected() {
		return this.connection !=null;
	}
	
	public boolean isLogin(String user, String password, String opt) throws SQLException{
		
		PreparedStatement pr = null;
		ResultSet rs = null;
		
		String sql = "SEELECT * FROM login where username = ? and password = ? and division = ?";
				 try
	    {
	      pr = this.connection.prepareStatement(sql);
	      pr.setString(1, user);
	      pr.setString(2, password);
	      pr.setString(3, opt);
	      
	      rs = pr.executeQuery();
	      if (rs.next()) {
	        return true;
	      }
	      return false;
	    }
	    catch (SQLException e)
	    {
	      return false;
	    }
	    finally
	    {
	      pr.close();
	      rs.close();
	    }
	  }
	}
	  
	
