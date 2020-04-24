package Employee;

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

public class EmployeeController implements Initializable {

	@FXML
	private TextField ID;
	@FXML 
	private TextField project;
	@FXML
	private TextArea comments;
	@FXML
	private DatePicker date;
	
	@FXML
	private TableView<ProjectToAssign> projecttable;
	@FXML
	private TableColumn<ProjectToAssign, String> IDcol;
	@FXML
	private TableColumn<ProjectToAssign, String> commentscol;
	@FXML
	private TableColumn<ProjectToAssign, String> projectcol;
	@FXML
	private TableColumn<ProjectToAssign, String> datecol;
	@FXML
	private Button loadButton;
	@FXML
	private dbConnection dc;
	@FXML
	private ObservableList<ProjectToAssign> data;
	

	
	public void initialize(URL url, ResourceBundle rb) {
		
		this.dc = new dbConnection();
	}
	
	@FXML
	private void loadEmployeeData() throws SQLException {
		try {
			Connection connec = dbConnection.getConnection();
			this.data = FXCollections.observableArrayList();
			
			ResultSet rs = connec.createStatement().executeQuery("SELECT * FROM Projects");
			while (rs.next()) 
				data.add(new ProjectToAssign(rs.getString(1),rs.getString(2),rs.getString(3), rs.getString(4)));
		}
		catch (SQLException e) {
		System.err.println("Error");
		}
		this.IDcol.setCellValueFactory(new PropertyValueFactory<ProjectToAssign, String>("ID") );
		this.projectcol.setCellValueFactory(new PropertyValueFactory<ProjectToAssign, String>("Project") );
		this.commentscol.setCellValueFactory(new PropertyValueFactory<ProjectToAssign, String>("Comments") );
		this.datecol.setCellValueFactory(new PropertyValueFactory<ProjectToAssign, String>("Date") );
		this.projecttable.setItems(null);
		this.projecttable.setItems(this.data);
	}
}
