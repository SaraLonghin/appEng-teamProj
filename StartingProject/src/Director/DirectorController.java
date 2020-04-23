package Director;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;

import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ResourceBundle;

import dbUtil.dbConnection;

public class DirectorController implements Initializable {

	@FXML
	private TextField id;
	@FXML 
	private TextField name;
	@FXML
	private DatePicker dob;
	@FXML 
	private TextField contact;
	@FXML
	private TextField department;

	
	@FXML
	private TableView<EmployeeData> employeetable;
	
	@FXML
	private TableColumn<EmployeeData, String> idcol;
	@FXML
	private TableColumn<EmployeeData, String> namecol;
	@FXML
	private TableColumn<EmployeeData, String> dobcol;
	@FXML
	private TableColumn<EmployeeData, String> contactcol;
	@FXML
	private TableColumn<EmployeeData, String> departmentcol;
	
	private Button loadButton;
	private dbConnection dc;
	private ObservableList<EmployeeData> data ;
	

	
	public void initialize(URL url, ResourceBundle rb) {
		
		this.dc = new dbConnection();
	}
	
	@FXML
	private void loadEmployeeData(ActionEvent event) throws SQLException {
		try {
			Connection connec = dbConnection.getConnection();
			this.data = FXCollections.observableArrayList();
			
			ResultSet rs = connec.createStatement().executeQuery("SELECT * FROM Employee");
			while (rs.next()) {
				this.data.add(new EmployeeData(rs.getString(1),rs.getString(2),rs.getString(3), rs.getString(4),rs.getString(5)));
				
			}
		}
		
		catch (SQLException e) {
		System.err.println("Error");
		}

	this.idcol.setCellValueFactory(new PropertyValueFactory("ID") );
	this.namecol.setCellValueFactory(new PropertyValueFactory("Name") );
	this.dobcol.setCellValueFactory(new PropertyValueFactory("DateOfBirth") );
	this.contactcol.setCellValueFactory(new PropertyValueFactory("Contact") );
	this.departmentcol.setCellValueFactory(new PropertyValueFactory("Department") );
	
	this.employeetable.setItems(null);
	this.employeetable.setItems(this.data);
	
	}
	
	@FXML
	private void addEmployee(ActionEvent event) {
		String sql = "INSERT INTO 'Employee'('ID','Name','DateOfBirth','Contact','Department') VALUES (?,?,?,?,?)";
		
		try {
			Connection connec = dbConnection.getConnection();
			PreparedStatement stmt = connec.prepareStatement(sql);
			
			stmt.setString(1, this.id.getText());
			stmt.setString(2, this.name.getText());
			stmt.setString(3, this.dob.getEditor().getText());
			stmt.setString(4, this.contact.getText());
			stmt.setString(5, this.department.getText());
			
			
			stmt.execute();
			connec.close();
		}
		catch(SQLException e) {
			 System.err.println("Got an exception!");
		      System.err.println(e.getMessage());
		}
	}
	
	@FXML
	private void clearFields(ActionEvent event) {
		this.id.setText("");
		this.name.setText("");
		this.dob.setValue(null);
		this.contact.setText("");
		this.department.setText("");
		
	}
	@FXML
	private void delete(ActionEvent event) {
		String sql ="DELETE FROM 'Employee' WHERE id = ?";
		 try (Connection connec = dbConnection.getConnection();
	                PreparedStatement stmt = connec.prepareStatement(sql)) {
			 stmt.setString(1,null);
				stmt.setString(2,null);
				stmt.setString(3,null);
				stmt.setString(4,null);
				stmt.setString(5,null);
				
				
	         stmt.executeUpdate();
	         connec.close();

	    } catch (SQLException e) {
	    	e.printStackTrace();
	        
	    }
	}
	
	
		

}
	
	


