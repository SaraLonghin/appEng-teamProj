package Director;

import javafx.beans.property.SimpleStringProperty;
import javafx.beans.property.StringProperty;

public class ProjectToAssign {
	private final StringProperty ID;
	private final StringProperty Project;
	private final StringProperty Comments;
	
public ProjectToAssign(String id,String project, String comments) {
		
		this.ID = new SimpleStringProperty(id);
		this.Comments = new SimpleStringProperty(comments);
		this.Project = new SimpleStringProperty(project);
	}
	
	public String getID() {
		
		return (String)this.ID.get();
	}

	public String getProject() {
		return (String)this.Project.get();
	}

	public String getComments() {
		return (String)this.Comments.get();
	}
	 public void setID(String value)
	  {
	    this.ID.set(value);
	  }
	  
	  public void setProject(String value)
	  {
	    this.Project.set(value);
	  }
	  
	  public void setComments(String value)
	  {
	    this.Comments.set(value);
	  }
	  
	  public StringProperty idProperty() {
		  return this.ID;
	  }
	  
	  public StringProperty projectProperty() {
		  return this.Project;
	  }
	  
	  public StringProperty commentsProperty() {
		  return this.Comments;
	  }
	  

}
