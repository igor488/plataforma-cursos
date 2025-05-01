<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    // Exibe todos os cursos ao público na página inicial
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    // Exibe detalhes de um curso específico
    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.show', compact('curso'));
    }

    // Dashboard do administrador com lista de cursos
    public function adminIndex()
    {
        $cursos = Curso::all();
        return view('admin.dashboard', compact('cursos'));
    }

    // Exibe formulário de criação de curso
    public function create()
    {
        return view('admin.cursos.create');
    }

    // Armazena novo curso
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'link' => 'required|url',
            'imagem' => 'required|image|max:2048',
        ]);

        // Salvar imagem
        $path = $request->file('imagem')->store('cursos', 'public');
        $validated['imagem'] = $path;

        Curso::create($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Curso cadastrado com sucesso!');
    }

    // Exibe formulário de edição
    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('admin.cursos.edit', compact('curso'));
    }

    // Atualiza curso
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'link' => 'required|url',
            'imagem' => 'nullable|image|max:2048',
        ]);

        $curso = Curso::findOrFail($id);

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('cursos', 'public');
            $validated['imagem'] = $path;
        }

        $curso->update($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Curso atualizado com sucesso!');
    }

    // Deleta curso
    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Curso excluído com sucesso!');
    }
}
