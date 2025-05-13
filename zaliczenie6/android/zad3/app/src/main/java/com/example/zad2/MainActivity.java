package com.example.zad2;

import android.os.Bundle;
import android.widget.ListView;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {
    ListView listView;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });

        listView = findViewById(R.id.lista);
        List<ListItem> items = new ArrayList<>();
        items.add(new ListItem("Pies", "to jest Pies", R.drawable.pies));
        items.add(new ListItem("Ptak", "to jest Ptak", R.drawable.ptak));
        items.add(new ListItem("Ptaszek", "to jest Ptaszek", R.drawable.ptaszek));
        items.add(new ListItem("Żółw", "to jest Żółw", R.drawable.zolw));
        items.add(new ListItem("Tygrysek i Puchatek", "to jest Tygrysek i Puchatek", R.drawable.tygrysek_i_puchatek));
        items.add(new ListItem("Miki", "to jest Miki", R.drawable.miki));

        CustomAdapter adapter = new CustomAdapter(this, items);
        listView.setAdapter(adapter);

        listView.setAdapter(adapter);
        listView.setOnItemClickListener((parent, view, position, id) -> {
            int nr = (int) (id+1);
            String tekst = "Wybrano obrazek nr "+ nr;
            Toast.makeText(this, tekst, Toast.LENGTH_LONG).show();
        });
    }
}