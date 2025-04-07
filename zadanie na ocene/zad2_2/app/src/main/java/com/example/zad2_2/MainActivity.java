package com.example.zad2_2;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.LinearLayout;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {
    private EditText editText;
    private Button dodajButton;
    private Button usunButton;
    private LinearLayout taskContainer;

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
        editText = findViewById(R.id.editText);
        dodajButton = findViewById(R.id.dodaj);
        usunButton = findViewById(R.id.usun);
        taskContainer = findViewById(R.id.taskContainer);

        dodajButton.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {
                DodajZadanie(editText.getText().toString());
                editText.setText("");
            }
        });
        usunButton.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {
                UsunZadanie();
            }
        });

    }

    public void DodajZadanie(String tekst){
        CheckBox checkBox = new CheckBox(this);
        checkBox.setText(tekst);
        taskContainer.addView(checkBox);
    }
    public void UsunZadanie(){
        int childCount = taskContainer.getChildCount();
        for (int i = childCount - 1; i >= 0; i--) {
            View child = taskContainer.getChildAt(i);
            if (child instanceof CheckBox && ((CheckBox) child).isChecked()) {
                taskContainer.removeView(child);
            }
        }
    }
}