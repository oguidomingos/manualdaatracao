import Link from 'next/link';

export function Footer() {
  return (
    <footer className="w-full bg-[#0A0A0A] text-secondary-foreground/50">
      <div className="container mx-auto px-4 py-8">
        <div className="flex flex-col md:flex-row justify-between items-center gap-6">
          <div className="text-center md:text-left">
            <h3 className="font-headline text-2xl font-black text-accent">PornStar Coaching</h3>
            <p className="text-sm mt-1">Assuma o controle.</p>
          </div>
          <div className="flex gap-4 text-sm">
            <Link href="#" className="hover:text-accent transition-colors">Termos de Uso</Link>
            <Link href="#" className="hover:text-accent transition-colors">Política de Privacidade</Link>
          </div>
        </div>
        <div className="border-t border-accent/10 mt-6 pt-6 text-center text-xs text-secondary-foreground/30">
          <p>&copy; {new Date().getFullYear()} PornStar Coaching. Todos os direitos reservados.</p>
        </div>
      </div>
    </footer>
  );
}
