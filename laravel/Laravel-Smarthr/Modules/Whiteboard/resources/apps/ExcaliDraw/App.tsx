import React, { useEffect, useState, useRef, useCallback } from "react";
import { 
        Excalidraw,
        MainMenu,
        WelcomeScreen} from "@excalidraw/excalidraw";


function App() {
  return (
      <div style={{ height: "80vh" }}>
        <Excalidraw>

          <MainMenu>
            <MainMenu.DefaultItems.LoadScene />
            <MainMenu.DefaultItems.Export />
            <MainMenu.DefaultItems.SaveAsImage />
            <MainMenu.DefaultItems.Help />
            <MainMenu.DefaultItems.ClearCanvas />
            <MainMenu.DefaultItems.ChangeCanvasBackground />
           
          </MainMenu>

          <WelcomeScreen>
            
            <WelcomeScreen.Hints.ToolbarHint>
              <p> ToolBar Hints </p>
            </WelcomeScreen.Hints.ToolbarHint>
            <WelcomeScreen.Hints.MenuHint />
            <WelcomeScreen.Hints.HelpHint />

            <WelcomeScreen.Center>
              <WelcomeScreen.Center.Logo />
              <WelcomeScreen.Center.Heading>
                Excalidraw + SmartHR
              </WelcomeScreen.Center.Heading>
            </WelcomeScreen.Center>
            
          </WelcomeScreen>
          
        </Excalidraw>
      </div>
  );
}

export default App

