package com.app.crimereporting;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;
import android.widget.Toast;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;

public class Developer extends AppCompatActivity {

    public List<Lists> mData = new ArrayList<>();
    public RecyclerView recyclerView;
    public RecyclerViewAdapters recyclerViewAdapters;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_developer);

        this.setTitle("About Developers");

        recyclerView = (RecyclerView) findViewById(R.id.my_recycler_view);
        recyclerViewAdapters = new RecyclerViewAdapters(mData);
        RecyclerView.LayoutManager layoutManager = new LinearLayoutManager(getApplicationContext());
        recyclerView.setLayoutManager(layoutManager);
        recyclerView.setAdapter(recyclerViewAdapters);

        String JSON_FILE = "{'error' : '1', " +
            "'0' : {'matric' : 'CS20180204699', 'name' : 'Oyebode Bukunmi Dorcas', 'level' : 'ND 2 DPT'}, " +
            "'1' : {'matric' : 'CS20180205023', name : 'Oke Mary Oluwafunso', 'level' : 'ND 2 DPT'}," +
            "'2' : {'matric' : 'CS20180204480', name : 'Dansu Itunuoluwa Adefunke', 'level' : 'ND 2 DPT'}}";

        String matric,name,level;


        try {


            JSONObject object = new JSONObject(JSON_FILE);

            for (int ii =0; ii < object.length(); ii++){
                matric = object.getJSONObject(Integer.toString(ii)).getString("matric").toUpperCase();
                name = object.getJSONObject(Integer.toString(ii)).getString("name");
                level = object.getJSONObject(Integer.toString(ii)).getString("level");
                mData.add(new Lists(matric,name +" \n \n"+level,"",Core.IMG_URL+matric+".jpg","0","false"));
            }

        }catch (JSONException e){
            e.printStackTrace();
        }
    }
}
